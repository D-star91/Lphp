<x-Studylayoutuser>

    <div class="B-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile">
                        <!-- Profile title -->
                        <h3 class="pro-title mt-1 mr-4">{{auth()->user()->name}}</h3>
                    </div>
                    <hr class="hr">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Profile Form -->
                    <div class="pro-card form-text">
                        <form class="md-form " action="{{route('Chprofile')}}" method="POST">
                            @csrf
                            @if(session("success"))
                                <div class="form-text text-center">
                                    {{session("success")}}
                                </div>
                            @endif
                            @if(session("error"))
                                <div class="form-text text-center">
                                    {{session("error")}}
                                </div>
                            @endif
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-user input-prefix"></i>
                                    <input type="text" id="form1" class="form-control" value="{{auth()->user()->name}}" name="name">
                                    <label for="form1">NAME</label>
                                </div>
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-envelope-open-text input-prefix"></i>
                                    <input type="email" id="form1" class="form-control" value="{{auth()->user()->email}}" name="email">
                                    <label for="form2">EMAIL</label>
                                </div>
                                  <hr class="hr-1">
                                <!-- password -->
                                <h3 class="form-text mt-5">PASSWORD CHANGE</h3>
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-lock input-prefix"></i>
                                    <input type="password" id="form1" class="form-control" name="old_password">
                                    <label for="form2">OLD PASSWORD</label>
                                </div>
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-lock input-prefix"></i>
                                    <input type="password" id="form1" class="form-control" name="new_password">
                                    <label for="form2">NEW PASSWORD</label>
                                </div>
                                
                                  <button type="submit" class="btn-pray">SAVE</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-form">
        <div class="container">
            
        </div>
    </div>
    <script>
        // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
    </script>

</x-Studylayoutuser>