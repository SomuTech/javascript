//print characters of string line by line
var str="good morning every body";
function display()
{
    for(var i=0; i<str.length; i++)
    {
        if(str[i]!=' ')
            console.log(str[i]);
    }
}

//count of character 'e' in string
var count=0;
str="Ethan is already here";
function char_Count()
{
    for(var i=0; i<str.length; i++)
    {
        if(str[i]=='e' || str[i]=='E')
            count++;
    }
    return count;
}

//check whether link is secure or not
function Check_Link(link)
{
    if(link.startsWith('https'))
        console.log("secure link");
    else
        console.log("Not a secure link");
}

//display index of each word in string
str="display index of each word in string";
function PrintIndex()
{
    for(var i=0; i<str.length; i++ )
    {
        if((i==0 && str[i]!=' '))
            console.log(i);
        if((str[i]==' ' && str[i+1]!=' '))
            console.log(i+1);
    }
}