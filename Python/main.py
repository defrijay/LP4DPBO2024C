from car import Car
from garage import Garage
from motorcycle import Motorcycle
# from parkingLot import ParkingLot
from vehicle import Vehicle



garage = Garage("My Garage", 200.0)

car1 = Car("ABC123", "Toyota", 2022, "Red", 5, 4)
car2 = Car("ABC123", "Toyota", 2022, "Red", 5, 4)
motorcycle1 = Motorcycle("XYZ456", "Honda", 2020, "Black", "Sport", 10)
motorcycle2 = Motorcycle("XYZ456", "Honda", 2020, "Black", "Sport", 10)

garage.add_vehicle(car1)
garage.add_vehicle(motorcycle1)
garage.add_vehicle(car2)
garage.add_vehicle(motorcycle2)

garage.display_vehicles()
