from vehicle import Vehicle

class Car(Vehicle):
    def __init__(self, plate_number, brand, year, color, num_of_seats, num_of_doors):
        super().__init__(plate_number, brand, year, color)
        self.num_of_seats = num_of_seats
        self.num_of_doors = num_of_doors

    def display_info(self):
        super().display_info()
        print("Number of Seats:", self.num_of_seats)
        print("Number of Doors:", self.num_of_doors)
