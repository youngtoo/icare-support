<x-theme>
    
    <x-slot:pageTitle>
        New Ticket
    </x-slot>
    <hr>
    <a href="{{ url()->previous() }}"> <i data-feather="arrow-left" class="text-dark"></i></a>

    

    <div class="mt-3">
        <form action="">

            @csrf
            <div class="mb-3">
                <h5>Issue Category</h5>


               

                <div class="row gx-3 gy-2 align-items-center">
                    <div class="col-sm-3">
                        <label class="visually-hidden" for="specificSizeInputName">Name</label>
                        <input type="text" class="form-control form-control-sm" id="specificSizeInputName" placeholder="Jane Doe">
                    </div>


                    <div class="col-sm-3">
                        <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                        <select class="form-select form-select-sm" id="specificSizeSelect">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>

                </div>

            </div>

            <div class="mb-3">
                <label for="issue" class="form-label">Issue</label>
                <input type="text" name="issue" id="issue" class="form-control">
                <div class="form-text">What's the issue?</div>
            </div>
        </form>
    </div>

    <div>
        <livewire:counter />
    </div>
</x-theme>