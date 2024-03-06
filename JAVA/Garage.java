package  Java;

import java.util.ArrayList;
import java.util.List;

public class Garage {
    private String name;
    private double area;
    private List<Vehicle> vehicles;

    public Garage(String name, double area) {
        this.name = name;
        this.area = area;
        this.vehicles = new ArrayList<>();
    }

    public void addVehicle(Vehicle vehicle) {
        vehicles.add(vehicle);
    }

    public void displayVehicles() {
        System.out.println("Garage: " + name + ", Area: " + area + " sqm");
        System.out.println("Vehicles:");
        for (Vehicle vehicle : vehicles) {
            vehicle.displayInfo();
            System.out.println();
        }
    }
}
