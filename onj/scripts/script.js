function open_contest(contest_id,base_url)
{
    //alert(base_url);
         //var win=window.open("http://www.google.com", '_blank');  // For opening in new tab
   // var win=window.open(base_url+"index.php/contests/main/"+contest_id, '_self');  // For opening in same tab
    var win=window.open(base_url+"contests/main/"+contest_id, '_self');      
    win.focus();
}

function open_practice_type(practice_type,base_url)
{
    //alert(base_url);
         //var win=window.open("http://www.google.com", '_blank');  // For opening in new tab
    var win=window.open(base_url+"practice/"+practice_type+"/1/sort_accepted_submissions", '_self');  // For opening in same tab
         
    win.focus();
}

function open_practice_page_number(practice_type,page_num,base_url,current_page_num)
{
    var current_url = document.URL;
    var new_url = current_url.replace("/"+current_page_num+"/","/"+page_num+"/");
         //var win=window.open("http://www.google.com", '_blank');  // For opening in new tab

    var win=window.open(new_url, '_self');  // For opening in same tab
         
    win.focus();
}

function open_problem_practice(practice_type,problem_id,base_url)
{
	//alert(base_url);
	var win = window.open(base_url+"practice/problem/"+problem_id,'_self');
	win.focus();
}

function open_practice_sorted(current_url,sortby)
{
	//alert(base_url);
	// var practice_type;
	// var segments = current_url.split("/");
	
	// if ((segments.indexOf("easy"))+1)
	// 	practice_type = segments[segments.indexOf("easy")];
	// else if ((segments.indexOf("medium"))+1)
	// 	practice_type = segments[segments.indexOf("easy")];
	// else if ((segments.indexOf("hard"))+1)
	// 	practice_type = segments[segments.indexOf("easy")];

	var index = current_url.indexOf("/sort_");
	var base = current_url.substr(0,index);
	// alert (base+"/"+sortby);

	var win = window.open(base+"/"+sortby,'_self');
	win.focus();
}

function open_problem(problem_id,base_url)
{
	//alert(base_url);
	var win = window.open(base_url+"contests/problem/"+problem_id,'_blank');
	win.focus();
}

$(function(){

	$(".ui.dropdown").dropdown({
    onChange: function (val) {
        // alert(val);
        open_practice_sorted(document.URL,val);
    }
	});
	
});