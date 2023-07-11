import argparse
import matplotlib.pyplot as plt

def generate_graph(start_date, end_date, output_path):
    # Generate the graph based on the provided dates
    # Example graph generation code using Matplotlib
    x = [1, 2, 3, 4, 5]
    y = [3, 5, 2, 7, 4]
    plt.plot(x, y)
    plt.xlabel('X-axis')
    plt.ylabel('Y-axis')
    plt.title('Sample Graph')
    plt.savefig(output_path)

if __name__ == '__main__':
    parser = argparse.ArgumentParser()
    parser.add_argument('--start_date', type=str, help='Start date')
    parser.add_argument('--end_date', type=str, help='End date')
    parser.add_argument('--output_path', type=str, help='Output path for the graph image')
    args = parser.parse_args()

    generate_graph(args.start_date, args.end_date, args.output_path)
