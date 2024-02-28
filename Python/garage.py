class Garage:
    def __init__(self, name, area):
        self.name = name
        self.area = area
        self.vehicles = []

    def add_vehicle(self, vehicle):
        self.vehicles.append(vehicle)

    def display_vehicles(self):
        print("Garage:", self.name + ", Area:", self.area, "sqm")
        print("Vehicles:")
        for vehicle in self.vehicles:
            vehicle.display_info()
            print()


if __name__ == "__main__":
    from car import Car
    from motorcycle import Motorcycle

    garage = Garage("My Garage", 200.0)

    car1 = Car("ABC123", "Toyota", 2022, "Red", 5, 4)
    motorcycle1 = Motorcycle("XYZ456", "Honda", 2020, "Black", "Sport", 10)

    garage.add_vehicle(car1)
    garage.add_vehicle(motorcycle1)

    garage.display_vehicles()
