@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
               
                        <div class="nk-content-inner">
    <div class="nk-content-body">
                            <div class="card h-100">
                  <div class="card-body">
        <div class="container">
            <form action="" class="row gy-3 mt-2">

            <div class="form-group col-md-6">
           <?php createText("serviceName", "serviceName", "Service Name", "form-control", "", "Service Name")?>
 
    </div>
          
            <div class="form-group col-md-6">
           <?php createText("time", "time", "Time", "form-control", "", "Time")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("date", "date", "Date", "form-control", "", "Date")?>
 
    </div>
      
    <div class="form-control-wrap col-md-12">
        <?php createButton("btn-primary","","Submit")?>
        </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@include("partials.footer")
