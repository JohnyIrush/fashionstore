<?php

namespace App\Http\Controllers\Gateways\Stripe;

use App\Events\CreateOrderEvent;
use App\Http\Controllers\Controller;
use App\Models\StripeSingleChargeTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StripeController extends Controller
{
    public function __constructor()
    {
        $this->middleware("web");
    }

    public function createCustomer()
    {
        User::find(Auth::user()->id)->createAsStripeCustomer();
    }

    public function getStripeCustomer()
    {
        User::find(Auth::user()->id)->asStripeCustomer();
    }

    public function updateStripeCustomer()
    {
        User::find(Auth::user()->id)->updateStripeCustomer();
    }

    public function getStripeCustomerBalance()
    {
        User::find(Auth::user()->id)->asStripeCustomer();
    }

    public function creditStripeCustomerBalance()
    {
        User::find(Auth::user()->id)->applyBalance(-500, 'Premium customer top-up.');
    }

    public function debitStripeCustomerBalance()
    {
        User::find(Auth::user()->id)->applyBalance(300, 'Bad usage penalty.');
    }

    public function stripeCustomerBalanceTransactions()
    {
        User::find(Auth::user()->id)->balanceTransactions();
    }

    public function stripeCustomerTaxIds()
    {
        User::find(Auth::user()->id)->taxIds();
    }

    public function getStripeCustomerTaxId()
    {
        User::find(Auth::user()->id)->findTaxId('txi_belgium');
    }


    public function createStripeCustomerTaxId()
    {
        User::find(Auth::user()->id)->createTaxId('eu_vat', 'BE0123456789');
    }

    public function deleteStripeCustomerTaxId()
    {
        User::find(Auth::user()->id)->deleteTaxId('eu_vat', 'BE0123456789');
    }

    public function billingPortal(Request $request)
    {
        return $request->user()->redirectToBillingPortal('/');
    }

    public function createSetupIntent()
    {
        return User::find(Auth::user()->id)->createSetupIntent();
    }

    public function addPaymentMethod(Request $request)
    {
        #User::find(Auth::user()->id)->addPaymentMethod($request->payment_method);
        # $this->updateStripeCustomer();
        $this->createCustomer();
        if (User::find(Auth::user()->id)->hasDefaultPaymentMethod()) {
            User::find(Auth::user()->id)->updateDefaultPaymentMethod($request->payment_method);
        } else 
        {
            User::find(Auth::user()->id)->addPaymentMethod($request->payment_method);
        }
    }

    public function checkout(Request $request)
    {
        $stripeCharge = $request->user()->charge(
            session('cart')->totalPrice, $request->id
        );

        if($stripeCharge->status == "succeeded")
        {
            StripeSingleChargeTransaction::create(
                [
                 'order_id' => DB::table('orders')->orderBy('id', 'desc')->first()->id + 1,
                 'transaction' => json_encode('$stripeCharge')
                ]);

            event(new CreateOrderEvent([
                'payment_id' => 2,
                'transaction_id' => DB::table('stripe_single_charge_transactions')->orderBy('id', 'desc')->first()->id
            ]));
        }

        return $stripeCharge;
    }

}
