this is a simple blog created with my own php framwork.
based on slim framwork for easy routing.
<br>
i decided to go with the most minimalistic implantation of my framework.<br>
just to show how it works i have a much bigger project and will create a few more complex ones<br>
in the future. 
<br>
also i didnt use any design,the hole system is a pure example of data maniulation (although a simple implantation)
<br>

what is uses:<br>
*ajax crud for easy admin side (check out their website its really simple).<br>
*my login class<br>
*google map class from php classes with my helper functions<br>
*my template class for simple templates<br>
*my pdo crud class for simple sql db manipulation<br>
*and a few other of my classes all with example uses<br>

structure:<br>
*yapi, holds all the php classes used<br>
*screenshots, screenshots of most pages just to show how it looks ,bare bone bootstra no graphic design at wall.<br>
*css/js where the project css and js files are.<br>
*img ,is where all the imges are stored .<br>
*controlers, holds all the different data controllers.<br>
*templates, holds all the different data display files no db manipulation or complex stuff here.<br>
*routs, holds all the routs for the slim php framework, being called by index.php.<br>
*config.php ,here you configure your sql database information.<br>
*install.php ,installs the database table structure with example records to the db you specified in config.php .<br>
*header.php ,used for calling all the necessary php class.<br>
*index.php initialises the slim php framework and calls routs.<br>
*yindex.php ,the actual index.php that will be called by slim php<br><br>

i know its better to use cakephp or larvel, but i like doing stuff like that. everything from ground up.
