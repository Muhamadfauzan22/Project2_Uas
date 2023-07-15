<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; K-Drama</span>
        </div>
    </div>
</footer>
@if(Auth::check())
@if(Auth::user()->role != 'admin')
<script>
    window.location = "/";
</script>
@endif
@endif

@if(session('authsuccess'))
<script>
    alert('{{ session("authsuccess") }}');
</script>
@endif