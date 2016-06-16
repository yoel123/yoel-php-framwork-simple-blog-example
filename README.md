this is a simple blog created with my own php framwork.
based on slim framwork for easy routing.
<br>
i decided to go with the most minimalistic implantation of my framework.<br>
just to show how it works i have a much bigger project and will create a few more complex ones<br>
in the future. 
<br>

what is uses:
*ajax crud for easy admin side (check out their website its really simple).
*my login class
*google map class pfom php class with my helper functions
*my template class for simple templates
*my pdo crud class for simple sql db manipulation
*and a few other of my class all with example uses

structure:
*yapi, holds all the php class used
*screenshots, screenshots of most pages just to show how it looks ,bare bone bootstra no graphic design at wall.
*css/js where the project css and js files are.
*img ,is where all the imges are stored .
*controlers, holds all the different data controllers.
*templates, holds all the different data display files no db manipulation or complex stuff here.
*routs, holds all the routs for the slim php framework, being called by index.php.
*config.php ,here you configure your sql database information.
*install.php ,installs the database table structure with example records to the db you specified in config.php .
*header.php ,used for calling all the necessary php class.
*index.php initialises the slim php framework and calls routs.
*yindex.php ,the actual index.php that will be called by slim php

i know its better to use cakephp or larvel, but i like doing stuff like that. everything from ground up.
