package Java;

public class Main {
    public static void main(String[] args) {
        Garage garage = new Garage("My Garage", 200.0);

        Car car1 = new Car("ABC123", "Toyota", 2022, "Red", 5, 4);
        Motorcycle motorcycle1 = new Motorcycle("XYZ456", "Honda", 2020, "Black", "Sport", 10);

        garage.addVehicle(car1);
        garage.addVehicle(motorcycle1);

        garage.displayVehicles();
    }
}
