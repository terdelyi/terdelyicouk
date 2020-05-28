<template>
  <Layout>

    <h1 class="page-title">Contact</h1>

    <div class="font-display mb-4">Recruiters you shall not pass here! But if you're not one of them and you have an exciting project idea fill me in with the details in case I might be interested.</div>

    <div class="mb-10">
      <form name="contact" action="/contact/thanks" method="POST" data-netlify="true">
        <div class="my-3"><input type="text" name="name" class="text-input" placeholder="Name"></div>
        <div class="my-3"><input type="email" name="email" class="text-input" placeholder="Email"></div>
        <div class="my-3"><textarea name="message" class="text-input h-32" placeholder="Message"></textarea></div>
        <div><button type="submit" class="btn">Send</button></div>
      </form>
    </div>

  </Layout>
</template>

<script>
export default {
  metaInfo: {
    title: "Contact"
  }
};
</script>
