        function verify(form)
        {
           var passed = false;
        var blnRetval, intAtSign, intDot, intComma, intSpace, intLastDot, intDomain, intStrLen;
        if (form.email_address){
                       intAtSign=form.email_address.value.indexOf("@");
                        intDot=form.email_address.value.indexOf(".",intAtSign);
                        intComma=form.email_address.value.indexOf(",");
                        intSpace=form.email_address.value.indexOf(" ");
                        intLastDot=form.email_address.value.lastIndexOf(".");
                        intDomain=intDot-intAtSign;
                        intStrLen=form.email_address.value.length;
                // *** CHECK FOR BLANK EMAIL VALUE
                   if (form.email_address.value == "" )
                   {
                alert("You have not entered an email address.");
                form.email_address.focus();
                passed = false;
                }
                // **** CHECK FOR THE  @ SIGN?
                else if (intAtSign == -1)
                {

                alert("Your email address is missing the \"@\".");
                        form.email_address.focus();
                passed = false;

                }
                // **** Check for commas ****

                else if (intComma != -1)
                {
                alert("email_address address cannot contain a comma.");
                form.email_address.focus();
                passed = false;
                }

                // **** Check for a space ****

                else if (intSpace != -1)
                {
                alert("email_address address cannot contain spaces.");
                form.email_address.focus();
                passed = false;
                }

                // **** Check for char between the @ and dot, chars between dots, and at least 1 char after the last dot ****

                else if ((intDot <= 2) || (intDomain <= 1)  || (intStrLen-(intLastDot+1) < 2))
                {
                alert("Please enter a valid email_address address.\n" + form.email_address.value + " is invalid.");
                form.email_address.focus();
                passed = false;
                }
                else {
                        passed = true;
                }
        }
        else    {
                passed = true;
        }
        return passed;
  }