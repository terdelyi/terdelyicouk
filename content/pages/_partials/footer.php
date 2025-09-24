        </main>
        <footer class="w-full dark:text-content/50 <?php if ($page->permalink !== '/') : ?>bg-black/5 text-body/70 dark:bg-none py-5 dark:mb-5<?php else: ?>text-body/60 py-10<?php endif; ?>">
            <div class="w-full md:max-w-screen-lg px-10 mx-auto text-center text-xs tracking-wide <?php if ($page->permalink !== '/') : ?>dark:border-t dark:border-white/10 dark:pt-5<?php endif; ?>">
                No webdesigners were harmed in the making of this website. All rights reserved &copy; <?php echo date('Y'); ?>.
            </div>
        </footer>
    </div>

    <script src="<?php echo asset('js/site.js'); ?>"></script>
</body>
</html>