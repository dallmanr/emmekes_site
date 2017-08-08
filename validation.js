/* Checks the value in firstName text box to ensure it is not empty*/
/*global object */

function validateFirstName()
{
    var aFirstName = document.getElementById('firstName').value;
    if (aFirstName === "" || aFirstName === null)
    {
        document.getElementById('firstName').style.backgroundColor = 'pink';
    } else
    {
        document.getElementById('firstName').style.backgroundColor = 'lightgreen';
    }
    return true;
}

/* Checks the value in secondName text box to ensure it is not empty*/
function validateLastName()
{
    var aLastName = document.getElementById('lastName').value;
    if (aLastName === "" || aLastName.value === "Last Name" || aLastName === null)
    {
        document.getElementById('lastName').style.backgroundColor = 'pink';
    } else
    {
        document.getElementById('lastName').style.backgroundColor = 'lightgreen';
    }
    return true;
}

/* Checks the value in the email text box to ensure it is not empty and is a validate
 email address*/
function validateEmail()
{
    var anEmailAddress = document.getElementById("emailAddress").value;
    var emailRegEx = "/^\\w+@[a-zA-Z]+?\\.[a-zA-Z]{2.6}";
    if (!anEmailAddress === emailRegEx || anEmailAddress === "" || anEmailAddress === null)
    {
        document.getElementById("emailAddress").style.backgroundColor = 'pink';
    } else
    {
        document.getElementById("emailAddress").style.backgroundColor = 'lightgreen';
    }
    return true;
}


/* For finding the screen size and setting the footer/body of page size */
function getScreenSize()
{
    var viewportwidth;
    var viewportheight;


    if (typeof window.innerWidth !== 'undefined')
    {
        viewportwidth = window.innerWidth,
                viewportheight = window.innerHeight;
    } else if (typeof document.documentElement !== 'undefined'
            && typeof document.documentElement.clientWidth !==
            'undefined' && document.documentElement.clientWidth !== 0)
    {
        viewportwidth = document.documentElement.clientWidth,
                viewportheight = document.documentElement.clientHeight;
    } else
    {
        viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
                viewportheight = document.getElementsByTagName('body')[0].clientHeight;
    }
    return viewportwidth, viewportheight;
}
