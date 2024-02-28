#include <iostream>
#include <vector>
#include <string>
#include "Vehicle.cpp"

using namespace std;

class Car : public Vehicle {
private:
    int numOfSeats;
    int numOfDoors;
public:
    Car(string plateNumber, string brand, int year, string color, int numOfSeats, int numOfDoors)
        : Vehicle(plateNumber, brand, year, color), numOfSeats(numOfSeats), numOfDoors(numOfDoors) {}

    void displayInfo() override {
        Vehicle::displayInfo();
        cout << "Number of Seats: " << numOfSeats << endl;
        cout << "Number of Doors: " << numOfDoors << endl;
    }
};