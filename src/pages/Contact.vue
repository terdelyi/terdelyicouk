<template>
  <Layout>

    <h1 class="page-title">Contact</h1>

    <div class="font-display mb-4"><span class="font-semibold">Recruiters shall not pass here!</span> For anyone else: if you have an exciting project idea fill me in with the details in case I might be interested.</div>

    <div class="mb-10">
      <form v-on:submit.prevent="handleSubmit" name="contact" action="/contact/thanks/" method="post" data-netlify="true" data-netlify-honeypot="bot-field">
        <input type="hidden" name="form-name" value="Contact" />
        <div hidden>Don’t fill this out: <input name="bot-field" /></div>
        <div class="my-3"><input type="text" name="name" v-model="formData.name" class="text-input" placeholder="Name"></div>
        <div class="my-3"><input type="email" name="email" v-model="formData.email" class="text-input" placeholder="Email"></div>
        <div class="my-3"><textarea name="message" v-model="formData.message" class="text-input h-32" placeholder="Message"></textarea></div>
        <div><button type="submit" class="btn">Send</button></div>
      </form>
    </div>

  </Layout>
</template>

<script>
export default {
  data() {
    return {
      formData: {},
    }
  },
  metaInfo: {
    title: "Contact"
  },
  methods: {
    encode(data) {
      return Object.keys(data)
        .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
        .join('&')
    },
    handleSubmit(e) {
      fetch('/', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: this.encode({
          'form-name': e.target.getAttribute('name'),
          ...this.formData,
        }),
      })
      .then(() => this.$router.push('/contact/thanks/'))
      .catch(error => alert(error))
    }
  }
};
</script>
