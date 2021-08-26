class Category
{
    constructor (id,name,code)
    {
        this.id=id;
        this.name=name;
        this.code=code;
    }

    getDisplayText()
    {
        return this.name +" sold by:";
    }
}