<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">@yield('form-title')</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            @yield('form-body')
        </section>
        <footer class="modal-card-foot">
            @yield('form-footer')
        </footer>
    </div>
</div>