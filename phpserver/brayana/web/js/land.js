$(document).ready(function(){
        islogged();
        
});
function saveLandDetail(){
    	var siteName = $("#siteName").val();
    	var surveyNo = $("#surveyNo").val();
      var area = $("#area").val();
      var city = $("#city").val();
      var installmentMonths = $("#installmentMonths").val();
      var installmentAmount = $("#installmentAmount").val();
      var desc = $("desc").val();
      var data = {
                    "site_name":siteName,
                    "desc":desc,
                    "survey_no":surveyNo,
                    "city":city,
                    "area":area,
                    "inst_month":installmentMonths,
                    "inst_amount":installmentAmount,
                    "Total_amount":installmentMonths*installmentAmount
                  }
      var auth = getLocal("auth");
     $.ajax({
          type: "POST",
          url: api_url+"/api/addland",
          headers: { "auth":auth},
          dataType:"JSON",
          data:data,
          cache: false,
          success: function(msg, textStatus, xhr) {
            console.log(msg);
               
            }
        });

    return false;  
}

function openLandAddPage(){
    window.location='./landAddEdit.html';
}

function openLandUpdatePage(){
    window.location='./landAddEdit.html';
}

function init(){
    getLands();
}

function loadDataTable(){
    var table = $('#myTable').DataTable({
       "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
     
    // #myInput is a <input type="text"> element
    $('#myInput').on( 'keyup', function () {
        table.search( this.value ).draw();
    });
}
function getLands(){
     var auth = getLocal("auth");
     console.log(api_url);
     $.ajax({
          type: "GET",
          url: api_url+"/api/lands",
          headers: { "auth":auth},
          dataType:"JSON",
          cache: false,
          success: function(msg, textStatus, xhr) {
               var status = msg.STATUS;
               var data = msg.RESPONSE;
               if(status == "OK"){
                    if(data.count >0){
                        var list = data.data;
                        buildTable(list,data.count);
                        loadDataTable();
                    }
               }
            }
        });
}

function buildTable(list,count){
    for(var i=0;i<count;i++){
        console.log(list[i]);
        var markup = "<tr><td>"+(i+1)+"</td><td>"+list[i].site_name+"</td><td>"+list[i].survey_no+"</td><td>"+list[i].area+"</td><td>"+list[i].city+"</td><td> <button type='button' class='btn btn-outline-success' data-toggle='modal'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button><button type='button' class='btn btn-outline-danger' data-toggle='modal'><i class='fa fa-trash-o' aria-hidden='true'></i></button></td></tr>";
        $("table tbody").append(markup);
    }
    
}