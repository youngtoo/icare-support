<x-theme>

    <x-slot:pageTitle>
        Roles Management
    </x-slot>

    <!-- Check if there are any issues -->

    <!-- Display notification-->
        
        
        @isset($r)
        <table class="table table-light table-sm table-bordered table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created at</th>
                </tr>
            </thead>

            <tbody>
            @php
            // Define a counter
                $count = 1;
            @endphp
            @foreach ($r as $rr)
            
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $rr->name }}</td>
                    <td>{{ $rr->description }}</td>
                    <td>{{ $rr->created_at }}</td>
                <tr>
            @endforeach
            </tbody>
        </table>
            
        @endisset

        <div>
            <x-notify type="information" message="Seems like you can add more roles here."/>
            <button class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#addRoleModal">Add Role</button>
        </div>

  
    <!-- Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add a New Role</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    @csrf

                    <div>
                        <label for="roleName">Role Name</label>
                        <input type="text" name="roleName" id="roleName" class="form-control">
                    </div>

                    <div>
                        <label for="roleDescription">Description</label>
                        <textarea name="roleDescription" id="roleDescription" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn-sm btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn-sm btn btn-outline-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

</x-theme>