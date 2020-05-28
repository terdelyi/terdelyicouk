<template>
    <main class="container w-full lg:max-w-screen-lg lg:flex lg:items-center lg:justify-between mx-auto md:px-10 py-6 mb-10 text-center lg:text-left">
        <slot/>
    </main>
</template>

<static-query>
query {
    metadata {
        siteName
    }
}
</static-query>
