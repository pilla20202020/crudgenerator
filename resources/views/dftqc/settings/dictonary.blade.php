@include("dftqc/partials/headerincludes")

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            @include("dftqc/partials/sidebar")
            <div class="nk-wrap">
                @include("dftqc/partials/header")
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                            <div class="card">
                                        <div class="card-body">
                                            {{BibClass::addButton("settings/dictonary/add","Add Dictonary Word")}}
                                            {{BibCLass::dataTable($TableRows, $TableName)}}                                          
                                        </div>
                                    </div>                          
                                
                            </div>
                        </div>
                    </div>
                </div>
                @include("dftqc/partials/footer")
            </div>
        </div>
    </div>
</body>

@include("dftqc/partials/footerincludes");