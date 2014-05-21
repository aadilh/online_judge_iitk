function open_contest(contest_id,base_url)
{
    //alert(base_url);
         //var win=window.open("http://www.google.com", '_blank');  // For opening in new tab
    var win=window.open(base_url+"index.php/contests/contests/"+contest_id, '_self');  // For opening in same tab
         
    win.focus();
}

function open_problem(problem_id,base_url)
{
	alert(base_url);
	var win = window.open(base_url+"index.php/contests/problem/"+problem_id,'_blank');
	win.focus();
}
