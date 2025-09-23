<?php include 'content/pages/_partials/header.php'; ?>

    <article>
        <p class="mb-8">If you'd like to contact me, have any questions, an exciting project idea, or a contract or job opportunity, please fill me in with the details. I usually reply within a couple of workdays.</p>
        <div class="mb-8">
            <form name="contact" method="POST" action="<?php echo url('contact/thanks/') ?>" data-netlify="true" data-netlify-honeypot="bot-field" autocomplete="off">
                <input type="hidden" name="form-name" value="contact">
                <div hidden>Don't fill this out: <input name="bot-field" /></div>
                <div class="sm:flex mb-6 gap-10">
                    <div class="sm:w-1/2 mb-4 sm:mb-0">
                        <div class="font-semibold mb-2 text-base">Your name</div>
                        <input type="text" name="name" class="text-input" required>
                    </div>
                    <div class="sm:w-1/2">
                        <div class="font-semibold mb-2 text-base">Your email address</div>
                        <input type="email" name="email" class="text-input" required>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="font-semibold mb-2 text-base">How can I help you?</div>
                    <textarea name="message" class="text-input h-48" required></textarea>
                </div>
                <div>
                    <button type="submit">Send message</button>
                </div>
            </form>
        </div>
    </article>

<?php include 'content/pages/_partials/footer.php'; ?>