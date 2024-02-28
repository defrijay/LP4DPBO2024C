#include <iostream>
#include <vector>
#include <string>
#include "Vehicle.cpp"
using namespace std;

class Motorcycle : public Vehicle {
private:
    string type;
    int tankCapacity;
public:
    Motorcycle(string plateNumber, string brand, int year, string color, string type, int tankCapacity) : Vehicle(plateNumber, brand, year, color), type(type), tankCapacity(tankCapacity) {}

    void displayInfo() override {
        Vehicle::displayInfo();
        cout << "Type: " << type << endl;
        cout << "Tank Capacity: " << tankCapacity << " liters" << endl;
    }
};