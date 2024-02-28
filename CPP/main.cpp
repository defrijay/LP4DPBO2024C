
#include <iostream>
#include <vector>
#include <string>
#include "Vehicle.cpp"
#include "garage.cpp"
#include "car.cpp"
#include "motorcycle.cpp"

using namespace std;


int main() {
    Garage garage("My Garage", 200.0);

    Car car1("ABC123", "Toyota", 2022, "Red", 5, 4);
    Motorcycle motorcycle1("XYZ456", "Honda", 2020, "Black", "Sport", 10);

    garage.addVehicle(&car1);
    garage.addVehicle(&motorcycle1);

    garage.displayVehicles();

    return 0;
}
