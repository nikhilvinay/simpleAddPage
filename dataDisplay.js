function validation(whichPage)
{
    alert(whichPage);
    var addField=jQuery('#addField').val();
    if(addField=="")
        {
            jQuery('#addField').focus();
            jQuery('#checkName').html("Please Enter Name");
            $('#checkName').css({ 'color': 'red'});

            return false;
        }
    else
        {
         jQuery('#checkName').html("");   
        }
    //jQuery('.showDataHere').html("<div class='row'><label class='col-md-4 lbltext'>Name</label><div class='col-md-6'>"+addField+"</div></div>");
    //jQuery('.showDataHere').html("<div class='row'><label class='col-md-4 lbltext' id='getEditName' value="+addField+">Name</label><div class='col-md-6'>"+addField+"</div><div class='row' id='results'></div><div class='row' style='text-align:center'><input type='button' id='edit' class='btn' value='Edit' onclick='editThis()'style='background-color: antiquewhite;'></div></div>");
    
    jQuery('.showDataHere').html("<div class='row'><label class='col-md-4 lbltext' value="+addField+">Name</label><div class='col-md-6'><label id='getEditName' >"+addField+"</label></div><div class='row' id='results'></div><div class='row' style='text-align:center'><input type='button' id='edit' class='btn' value='Edit' onclick='editThis()'style='background-color: antiquewhite;'></div></div>");
    
    $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?",
        {
          tags: addField,
          tagmode: "any",
          format: "json"
        },
        function(data) {
          $.each(data.items, function(i,item){
            //$("<img/>").attr("src", item.media.m).prependTo("#results");
            jQuery('#results').html("<image src='"+item.media.m+"'></image>");
            if ( i == 10 ) return false;
          });
        });
}
function editThis(addField)
{
    var editThis=jQuery('#getEditName').html();
  
}