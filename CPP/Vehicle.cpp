#include <iostream>
#include <vector>
#include <string>

using namespace std;

class Vehicle {
protected:
    string plateNumber;
    string brand;
    int year;
    string color;
public:
    Vehicle(string plateNumber, string brand, int year, string color)
        : plateNumber(plateNumber), brand(brand), year(year), color(color) {}

    virtual void displayInfo() {
        cout << "Plate Number: " << plateNumber << endl;
        cout << "Brand: " << brand << endl;
        cout << "Year: " << year << endl;
        cout << "Color: " << color << endl;
    }
};