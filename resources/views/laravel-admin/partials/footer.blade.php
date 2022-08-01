<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
            <strong>Env</strong>&nbsp;&nbsp; {!! config('app.env') !!}
        @endif

        &nbsp;&nbsp;&nbsp;&nbsp;

        @if(config('admin.show_version'))
        <!-- <strong>Version</strong>&nbsp;&nbsp; {!! \Encore\Admin\Admin::VERSION !!} -->
        <strong>Version</strong>&nbsp;&nbsp; 0.01
        @endif

    </div>
    <!-- Default to the left -->
    <strong>　</strong>
</footer>