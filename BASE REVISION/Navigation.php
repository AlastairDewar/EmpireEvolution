<?PHP
Require("./classes/Navigation.class.php");
$Navigate = new Navigation();
if(isset($_GET[Page]))
{
	if(!is_numeric($_GET[Page]))
	{
	$Page=strtolower($_GET[Page]);
	if(strcmp(strtolower('Home'),$Page) == 0){$Navigate->home();}
	if(strcmp(strtolower('News'),$Page) == 0){$Navigate->news();}
	if(strcmp(strtolower('Login'),$Page) == 0){$Navigate->login();}
	if(strcmp(strtolower('Register'),$Page) == 0){$Navigate->register();}
	if(strcmp(strtolower('About'),$Page) == 0){$Navigate->about();}
	if(strcmp(strtolower('Screenshots'),$Page) == 0){$Navigate->screenshots();}
	}
}
else
{
	if(isset($_GET[NewsArticle]) && is_numeric($_GET[NewsArticle]))
	{
	$Navigate->news($_GET[NewsArticle]);
	}else{$Navigate->home();}
}
?>