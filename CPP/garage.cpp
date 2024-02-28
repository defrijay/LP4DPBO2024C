#include <iostream>
#include <vector>
#include <string>
#include "vehicle.cpp"
using namespace std;


class Garage {
private:
    string name;
    double area;
    vector<Vehicle*> vehicles;
public:
    Garage(string name, double area) : name(name), area(area) {}

    void addVehicle(Vehicle* vehicle) {
        vehicles.push_back(vehicle);
    }

    void displayVehicles() {
        cout << "Garage: " << name << ", Area: " << area << " sqm" << endl;
        cout << "Vehicles:" << endl;
        for (auto vehicle : vehicles) {
            vehicle->displayInfo();
            cout << endl;
        }
    }
};