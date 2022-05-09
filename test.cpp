#include <iostream>
using namespace std;

class Car{
    private:
        string model;
        string colour;
        string productionYear;
    public:
        // set
        void setModel( string m ){
            model = m;
        }
        
        void setColour( string c ){
            colour = c;
        }
        
        void setYear( string y ){
            productionYear = y;
        }
        
        // Get
        
        void getModel (){
            cout << "This Car Model Is : " << model;
            return;
        }
        
        void getColour (){
            cout << "This Car Colour Is : " << colour;
            return;
        }
        
        void getYear (){
            cout << "This Car is Produced In : " << productionYear;
            return;
        }
    
};

class Person{
    private:
        string name;
        string address;
    public:
        // Set
        void setName( string n ){
            name = n;
        }
        void setAddress( string a ){
            address = a;
        }
        // Get
        void getName (){
            cout << "Hello my name is : " << name;
            return;
        }
        void getAddress(){
            cout << "I live in : " << address;
            return;
        }
};

class Stnk{
    private:
        string car;
        string person;
        string tax;
    public:
        // Set
        void setCar( string c ){
            car = c;
        }
        void setPerson( string n ){
            person = n;
        }
        void setTax( string t ){
            tax = t;
        }
        // Get
        void getCar(){
            cout << "STNK Information for car : " << car;
            return;
        }
        void getPerson(){
            cout << "is owned by : " << person;
            return;
        }
        void getTax(){
            cout << "has the amout of tax (Rp): " << tax;
            return;
        }
        void getAllInformation(){
            cout << "Stnk information for car : " << car << " is owned by : " << person << " has the amount of tax (Rp): " << tax ;
            return;
        }
};


int main(){
    // Objectify Car Class
    Car car1;
    
    // Set car1 Value
    car1.setModel("Pajero");
    car1.setColour("Red");
    car1.setYear("2020");
    
    // Get car1 Value
    car1.getModel();
    cout << "\n";
    car1.getColour();
    cout << "\n";
    car1.getYear();
    cout << "\n";
    
    // Just to add some space so the text not to dense
    cout << "\n";
    
    // Objectify Person Class
    Person person1;
    
    // Set person1 Value
    person1.setName("Nugrah");
    person1.setAddress("Bandung");
    
    // Get person1 Value
    person1.getName();
    cout << "\n";
    person1.getAddress();
    cout << "\n";
    
    // Just to add some space so the text not to dense
    cout << "\n";
    
    // Objectify STNK Class
    Stnk stnk1;
    
    // Set stnk1 Value
    stnk1.setCar("Pajero");
    stnk1.setPerson("Nugrah");
    stnk1.setTax("2000");
    
    // Get stnk1 Value
    stnk1.getCar();
    cout << "\n";
    stnk1.getPerson();
    cout << "\n";
    stnk1.getTax();
    cout << "\n";
    
    // Just to add some space so the text not to dense
    cout << "\n";
    
    // and we get to return all value in one information like this
    stnk1.getAllInformation();
    
    // Just to add some space so the text not to dense
    cout << "\n";
    
    return 0;
}
