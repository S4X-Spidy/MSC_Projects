import java.util.Scanner;

public class SubArraySum {
    public static int SubArray(int[] nums) {
        
        int currentSum = nums[0];
        int maximunSum = nums[0];
        
        
        for (int i = 1; i < nums.length; i++) {
            
            currentSum = Math.max(nums[i], currentSum + nums[i]);
            
            
            maximumSum = Math.max(maximumSum, currentSum);
        }
        
        return maximumSum;
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter the number of elements in the array: ");
        int n = scanner.nextInt();

        int[] nums = new int[n];

        System.out.println("Enter the elements of the array:");
        for (int i = 0; i < n; i++) {
            nums[i] = scanner.nextInt();
        }
            
        System.out.println("Maximum subarray sum is: " + SubArray(nums));
        
        scanner.close();
    }
}