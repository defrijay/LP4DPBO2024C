from vehicle import Vehicle

class Motorcycle(Vehicle):
    def __init__(self, plate_number, brand, year, color, motor_type, tank_capacity):
        super().__init__(plate_number, brand, year, color)
        self.motor_type = motor_type
        self.tank_capacity = tank_capacity

    def display_info(self):
        super().display_info()
        print("Type:", self.motor_type)
        print("Tank Capacity:", self.tank_capacity, "liters")
