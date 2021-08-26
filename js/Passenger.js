export class Passenger
{
    constructor(fname,lname,gender,dob,age)
    {
        this.fname=fname;
        this.lname=lname;
        this.gender=gender;
        this.dob=dob;
        this.age=age;
    }
    getFullName()
    {
        var title=this.gender.code=='F'?'Mrs':'Mr';
        return title+ " "+this.fname+" "+this.lname;
    }
}