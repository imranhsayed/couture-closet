<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startDate = (new \DateTime())->modify('-6 days');
        $endDate = new \DateTime();

        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'provincial_tax_rate_id' => 1,
                'full_name' => 'Store Manager',
                'email' => 'admin@pace.com',
                'pst' => 0.00,
                'gst' => 5.25,
                'hst' => 0.00,
                'sub_amount' => 105.00,
                'total_amount' => 110.25,
                'shipping_address' => '77 Ulster St, Calgary, AB',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '77 Ulster St, Calgary, AB',
                'billing_phone_number' => '431-333-1234',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'pst' => 14.00,
                'gst' => 10.00,
                'hst' => 0.00,
                'sub_amount' => 200.00,
                'total_amount' => 224.00,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-333-1234',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 3,
                'provincial_tax_rate_id' => 3,
                'full_name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'pst' => 21.00,
                'gst' => 15.00,
                'hst' => 0.00,
                'sub_amount' => 300.00,
                'total_amount' => 336.00,
                'shipping_address' => '321 Oaken St, Winnipeg, MB',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '321 Oaken St, Winnipeg, MB',
                'billing_phone_number' => '431-333-1234',
                'status' => 3,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 4,
                'provincial_tax_rate_id' => 4,
                'full_name' => 'Rui Xio',
                'email' => 'rui@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 60.00,
                'sub_amount' => 400.00,
                'total_amount' => 460.00,
                'shipping_address' => '1234 Elm St, Toronto, ON',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '1234 Elm St, Toronto, ON',
                'billing_phone_number' => '431-333-1234',
                'status' => 4,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'pst' => 18.76,
                'gst' => 13.40,
                'hst' => 0.00,
                'sub_amount' => 267.97,
                'total_amount' => 300.13,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-555-9821',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'pst' => 12.04,
                'gst' => 8.60,
                'hst' => 0.00,
                'sub_amount' => 171.98,
                'total_amount' => 192.62,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-555-9821',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'pst' => 22.33,
                'gst' => 15.95,
                'hst' => 0.00,
                'sub_amount' => 318.96,
                'total_amount' => 357.24,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-555-9821',
                'status' => 3,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'pst' => 14.07,
                'gst' => 10.05,
                'hst' => 0.00,
                'sub_amount' => 200.99,
                'total_amount' => 225.11,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-555-9821',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'pst' => 13.51,
                'gst' => 9.65,
                'hst' => 0.00,
                'sub_amount' => 192.97,
                'total_amount' => 216.13,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-555-9821',
                'status' => 4,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 3,
                'provincial_tax_rate_id' => 3,
                'full_name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'pst' => 13.23,
                'gst' => 9.45,
                'hst' => 0.00,
                'sub_amount' => 188.96,
                'total_amount' => 211.64,
                'shipping_address' => '321 Oaken St, Winnipeg, MB',
                'shipping_phone_number' => '431-555-9822',
                'billing_address' => '321 Oaken St, Winnipeg, MB',
                'billing_phone_number' => '431-555-9822',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 3,
                'provincial_tax_rate_id' => 3,
                'full_name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'pst' => 13.44,
                'gst' => 9.60,
                'hst' => 0.00,
                'sub_amount' => 191.98,
                'total_amount' => 215.02,
                'shipping_address' => '321 Oaken St, Winnipeg, MB',
                'shipping_phone_number' => '431-555-9822',
                'billing_address' => '321 Oaken St, Winnipeg, MB',
                'billing_phone_number' => '431-555-9822',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 4,
                'provincial_tax_rate_id' => 7,
                'full_name' => 'Rui Xio',
                'email' => 'rui@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 30.94,
                'sub_amount' => 237.97,
                'total_amount' => 268.91,
                'shipping_address' => '1234 Elm St, Toronto, ON',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '1234 Elm St, Toronto, ON',
                'billing_phone_number' => '431-555-9821',
                'status' => 4,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 4,
                'provincial_tax_rate_id' => 7,
                'full_name' => 'Rui Xio',
                'email' => 'rui@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 35.36,
                'sub_amount' => 271.98,
                'total_amount' => 307.34,
                'shipping_address' => '1234 Elm St, Toronto, ON',
                'shipping_phone_number' => '431-555-9821',
                'billing_address' => '1234 Elm St, Toronto, ON',
                'billing_phone_number' => '431-555-9821',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 5,
                'provincial_tax_rate_id' => 9,
                'full_name' => 'Donald Obi',
                'email' => 'donald@example.com',
                'pst' => 17.20,
                'gst' => 8.60,
                'hst' => 0.00,
                'sub_amount' => 171.98,
                'total_amount' => 197.78,
                'shipping_address' => '385 Grande Allée O, Québec, QC',
                'shipping_phone_number' => '431-555-9833',
                'billing_address' => '385 Grande Allée O, Québec, QC',
                'billing_phone_number' => '431-555-9833',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 5,
                'provincial_tax_rate_id' => 9,
                'full_name' => 'Donald Obi',
                'email' => 'donald@example.com',
                'pst' => 24.00,
                'gst' => 12.00,
                'hst' => 0.00,
                'sub_amount' => 239.97,
                'total_amount' => 275.97,
                'shipping_address' => '385 Grande Allée O, Québec, QC',
                'shipping_phone_number' => '431-555-9833',
                'billing_address' => '385 Grande Allée O, Québec, QC',
                'billing_phone_number' => '431-555-9833',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 6,
                'provincial_tax_rate_id' => 5,
                'full_name' => 'Parth Kher',
                'email' => 'parth@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 37.80,
                'sub_amount' => 251.98,
                'total_amount' => 289.78,
                'shipping_address' => '100 Prince Philip Dr, St. John\'s, NL',
                'shipping_phone_number' => '431-555-9816',
                'billing_address' => '100 Prince Philip Dr, St. John\'s, NL',
                'billing_phone_number' => '431-555-9816',
                'status' => 3,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 6,
                'provincial_tax_rate_id' => 5,
                'full_name' => 'Parth Kher',
                'email' => 'parth@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 28.80,
                'sub_amount' => 191.98,
                'total_amount' => 220.78,
                'shipping_address' => '100 Prince Philip Dr, St. John\'s, NL',
                'shipping_phone_number' => '431-555-9816',
                'billing_address' => '100 Prince Philip Dr, St. John\'s, NL',
                'billing_phone_number' => '431-555-9816',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 7,
                'provincial_tax_rate_id' => 6,
                'full_name' => 'Snigdha Chately',
                'email' => 'snigdha@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 37.65,
                'sub_amount' => 250.99,
                'total_amount' => 288.64,
                'shipping_address' => '1505 Barrington St, Halifax, NS',
                'shipping_phone_number' => '431-444-9821',
                'billing_address' => '1505 Barrington St, Halifax, NS',
                'billing_phone_number' => '431-444-9821',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 7,
                'provincial_tax_rate_id' => 6,
                'full_name' => 'Snigdha Chatley',
                'email' => 'snigdha@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 26.09,
                'sub_amount' => 173.96,
                'total_amount' => 200.05,
                'shipping_address' => '1505 Barrington St, Halifax, NS',
                'shipping_phone_number' => '431-444-9821',
                'billing_address' => '1505 Barrington St, Halifax, NS',
                'billing_phone_number' => '431-444-9821',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 8,
                'provincial_tax_rate_id' => 10,
                'full_name' => 'Imran Saiyad',
                'email' => 'imran@example.com',
                'pst' => 12.24,
                'gst' => 10.20,
                'hst' => 0.00,
                'sub_amount' => 203.96,
                'total_amount' => 226.40,
                'shipping_address' => '2405 Legislative Dr, Regina, SK',
                'shipping_phone_number' => '4310059821',
                'billing_address' => '2405 Legislative Dr, Regina, SK',
                'billing_phone_number' => '4310059821',
                'status' => 3,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 8,
                'provincial_tax_rate_id' => 10,
                'full_name' => 'Imran Saiyad',
                'email' => 'imran@example.com',
                'pst' => 13.98,
                'gst' => 11.65,
                'hst' => 0.00,
                'sub_amount' => 232.97,
                'total_amount' => 258.60,
                'shipping_address' => '2405 Legislative Dr, Regina, SK',
                'shipping_phone_number' => '4310059821',
                'billing_address' => '2405 Legislative Dr, Regina, SK',
                'billing_phone_number' => '4310059821',
                'status' => 4,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 9,
                'provincial_tax_rate_id' => 8,
                'full_name' => 'Manish Kumar',
                'email' => 'manish@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 35.70,
                'sub_amount' => 237.97,
                'total_amount' => 273.67,
                'shipping_address' => '165 Richmond St, Charlottetown, PE',
                'shipping_phone_number' => '5678901234',
                'billing_address' => '165 Richmond St, Charlottetown, PE',
                'billing_phone_number' => '5678901234',
                'status' => 2,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 9,
                'provincial_tax_rate_id' => 8,
                'full_name' => 'Manish Kumar',
                'email' => 'manish@example.com',
                'pst' => 0.00,
                'gst' => 0.00,
                'hst' => 45.45,
                'sub_amount' => 302.97,
                'total_amount' => 348.42,
                'shipping_address' => '165 Richmond St, Charlottetown, PE',
                'shipping_phone_number' => '5678901234',
                'billing_address' => '165 Richmond St, Charlottetown, PE',
                'billing_phone_number' => '5678901234',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 10,
                'provincial_tax_rate_id' => 11,
                'full_name' => 'Aman Dawar',
                'email' => 'aman@example.com',
                'pst' => 0.00,
                'gst' => 9.60,
                'hst' => 0.00,
                'sub_amount' => 191.98,
                'total_amount' => 201.58,
                'shipping_address' => '4510 50 Ave, Yellowknife, NT',
                'shipping_phone_number' => '4318901234',
                'billing_address' => '4510 50 Ave, Yellowknife, NT',
                'billing_phone_number' => '4318901234',
                'status' => 3,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
            [
                'user_id' => 10,
                'provincial_tax_rate_id' => 11,
                'full_name' => 'Aman Dawar',
                'email' => 'aman@example.com',
                'pst' => 0.00,
                'gst' => 12.90,
                'hst' => 0.00,
                'sub_amount' => 257.97,
                'total_amount' => 270.87,
                'shipping_address' => '4510 50 Ave, Yellowknife, NT',
                'shipping_phone_number' => '4318901234',
                'billing_address' => '4510 50 Ave, Yellowknife, NT',
                'billing_phone_number' => '4318901234',
                'status' => 1,
                'order_date' => $this->generateRandomDate($startDate, $endDate)
            ],
        ]);
    }
    /**
     * Generate a random date between the given start and end dates.
     */
    private function generateRandomDate($startDate, $endDate) {
        $timestamp = mt_rand($startDate->getTimestamp(), $endDate->getTimestamp());
        return date("Y-m-d H:i:s", $timestamp);
    }
    
}