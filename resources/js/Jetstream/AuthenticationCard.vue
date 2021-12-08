<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 main-theme-bg-color">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 main-theme-sec-bg-color shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
