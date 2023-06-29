import { defineNuxtPlugin } from "#app";
import VueFathom from "@ubclaunchpad/vue-fathom";

export default defineNuxtPlugin((nuxtApp) => {
    nuxtApp.vueApp.use(VueFathom, {
        siteID: "APGETVFU",
        settings: {
            spa: "history",
            includedDomains: ["terdelyi.co.uk"]
        },
    });
});