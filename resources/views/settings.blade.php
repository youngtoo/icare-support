<x-theme>

    <x-slot:pageTitle>Settings</x-slot>

    <div>
        <ul class="nav nav-tabs" id="settingsTab" role="tablist">

            <!-- General Tab Button -->
            <li class="nav-item" role="presentation">
                <button class="nav-link active"
                        id="general-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#general-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="general-tab-pane"
                        aria-selected="true">
                        General
                </button>
            </li>
            <!-- ./End-->


            <!-- Team Tab Button -->
            <li class="nav-item" role="presentation">
                <button class="nav-link"
                        id="team-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#team-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="team-tab-pane"
                        aria-selected="true">
                        Team
                </button>
            </li>
            <!-- ./End-->


            <!-- Team Tab Button -->
            <li class="nav-item" role="presentation">
                <button class="nav-link"
                        id="department-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#department-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="department-tab-pane"
                        aria-selected="true">
                        Department
                </button>
            </li>
            <!-- ./End-->

            
        </ul>

        <div class="tab-content" id="settingsTabContent">
            
            <!--  General Tab Content -->
            <div class="tab-pane fade show active" 
                    id="general-tab-pane" 
                    role="tabpanel" 
                    ria-labelledby="home-tab" 
                    tabindex="0">

                    <div class="mt-3 p-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum itaque aliquid ipsum? Provident, laudantium eos exercitationem voluptatibus quae veritatis fugiat architecto praesentium voluptatem a, ea aliquid dolores officia magnam cupiditate!</p>
                    </div>
            </div>
            <!-- ./End -->

            <!--  Team Tab Content -->
            <div class="tab-pane fade" 
                    id="team-tab-pane" 
                    role="tabpanel" 
                    aria-labelledby="team-tab" 
                    tabindex="0">

                    <div class="mt-3 p-2">
                        <h6>Team</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum itaque aliquid ipsum? Provident, laudantium eos exercitationem voluptatibus quae veritatis fugiat architecto praesentium voluptatem a, ea aliquid dolores officia magnam cupiditate!</p>
                    </div>
            </div>
            <!-- ./End -->


            <!--  Department Tab Content -->
            <div class="tab-pane fade" 
                    id="department-tab-pane" 
                    role="tabpanel" 
                    aria-labelledby="department-tab" 
                    tabindex="0">

                    <div class="mt-3 p-2">
                        <h6>Deparment</h6>
                        
                    </div>
            </div>
            <!-- ./End -->

        </div>
    </div>

</x-theme>