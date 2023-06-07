@if($errors->any())

<ul class="list-unstyled">
    @foreach ($errors->all() as $err)
    <li>
        <script>
            swal({

                title: "{{$err}}",
                icon: "error",
                button: 'OK'
            });
            </script>
        </li>
    @endforeach
</ul>
{{-- @else
    <script>
        swal({

            title: "Thank You!",
            text: 'Your form is register successfully',
            icon: "success",
            button: 'OK'
        });
        </script> --}}

@endif
