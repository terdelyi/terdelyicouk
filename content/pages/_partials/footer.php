        </main>
        <footer class="dark:text-content/50 px-10 <?php if ($page->permalink !== '/') : ?>bg-black/5 text-body/70 dark:bg-none dark:border-t dark:border-white/10 py-5<?php else: ?>text-body/60 py-10<?php endif; ?>">
            <div class="max-w-screen-lg mx-auto text-center text-sm tracking-wide">
                No webdesigners were harmed in the making of this website. All rights reserved &copy; <?php echo date('Y'); ?>.
            </div>
        </footer>
    </div>

    <script src="<?php echo asset('js/site.js'); ?>"></script>
</body>
</html>