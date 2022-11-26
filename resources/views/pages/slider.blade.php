@extends('../layout/' . $layout)

@section('subhead')
    <title>Slider - MedCheck</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Slider</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Single Item -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <!-- <h2 class="font-medium text-base mr-auto">Single Item</h2> -->
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <!-- <label class="form-check-label ml-0" for="show-example-1">Show example code</label> -->
                        <!-- <input id="show-example-1" data-target="#single-item-slider" class="show-code form-check-input mr-0 ml-3" type="checkbox"> -->
                    </div>
                </div>
                <div id="single-item-slider" class="p-5">
                    <div class="preview">
                        <div class="mx-6">
                            <div class="single-item">
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">abc</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">def</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
