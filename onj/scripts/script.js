function open_contest(contest_id)
{
    //alert(contest_id);
         //var win=window.open("http://www.google.com", '_blank');  // For opening in new tab
    var win=window.open("http://localhost/onj1.0/index.php/contests/contests/"+contest_id, '_self');  // For opening in same tab
         
    win.focus();
}

function open_problem(problem_id)
{
	//alert(problem_id);
	var win = window.open("http://localhost/onj1.0/index.php/contests/problem/"+problem_id,'_blank');
	win.focus();
}
