<div id="caterrors"></div>
@foreach($shop->categories as $catindex => $category)
    <div id="cat{{$catindex}}"
         class="d-flex  align-items-start justify-content-between mt-2 w-100">
        <p style="display: inline-block;max-width: 290px!important;overflow: hidden">{{$category->name}}</p>
        <div class="d-flex">
            <form  style="margin-bottom: 0!important;"
                    hx-get="{{route('category.edit.htmx')}}"
                    hx-target="#cat{{$catindex}}">
                <input type="hidden" name="catid" value="{{$category->id}}">
                <button STYLE="width: min-content;">
                    <img style="cursor: pointer!important"
                         src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                </button>
            </form>
            <form class="deletecategoryalert" action="{{route('category.delete')}} "
                  method="post">
                @csrf
                <input type="hidden" name="catid" value="{{$category->id}}">
                <button class="deletecategorybuttonaction"></button>

            </form>
            <button type="button" class="deletecategorybutton" STYLE="width: min-content;">
                <img style="cursor: pointer!important;width: 24px; height: 24px"
                     src="{{asset('assets/icons/delete_remove_icon.svg')}}" alt="">
            </button>
        </div>

    </div>
@endforeach

<script>

     deletecategorybutton = document.querySelectorAll('.deletecategorybutton')
     deletecategorybuttonaction = document.querySelectorAll('.deletecategorybuttonaction')

    deletecategorybutton.forEach((el, index) => {
        el.addEventListener('click', () => {

            document.querySelector("[data-category]").close()
            document.body.style.overflow = 'auto';

            Swal.fire({
                title: "ნამდვილად გსურთ წაშლა?",
                // text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "გაუქმება",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "წაშლე",

            }).then((result) => {
                if (result.isConfirmed) {
                    deletecategorybuttonaction[index].click();
                }
                isSwalOpen = true;
            });
        });
    });

</script>