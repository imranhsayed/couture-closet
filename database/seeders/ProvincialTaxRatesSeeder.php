<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincialTaxRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provincial_tax_rates')->insert([
            [
                'province_code' => 'AB',
                'province_name' => 'Alberta',
                'gst_rate' => 0.05,
                'pst_rate' => 0.00,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.05
            ],
            [
                'province_code' => 'BC',
                'province_name' => 'British Columbia',
                'gst_rate' => 0.05,
                'pst_rate' => 0.07,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.12
            ],
            [
                'province_code' => 'MB',
                'province_name' => 'Manitoba',
                'gst_rate' => 0.05,
                'pst_rate' => 0.07,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.12
            ],
            [
                'province_code' => 'NB',
                'province_name' => 'New Brunswick',
                'gst_rate' => 0.00,
                'pst_rate' => 0.00,
                'hst_rate' => 0.15,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.15
            ],
            [
                'province_code' => 'NL',
                'province_name' => 'Newfoundland and Labrador',
                'gst_rate' => 0.00,
                'pst_rate' => 0.00,
                'hst_rate' => 0.15,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.15
            ],
            [
                'province_code' => 'NS',
                'province_name' => 'Nova Scotia',
                'gst_rate' => 0.00,
                'pst_rate' => 0.00,
                'hst_rate' => 0.15,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.15
            ],
            [
                'province_code' => 'ON',
                'province_name' => 'Ontario',
                'gst_rate' => 0.00,
                'pst_rate' => 0.00,
                'hst_rate' => 0.13,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.13
            ],
            [
                'province_code' => 'PE',
                'province_name' => 'Prince Edward Island',
                'gst_rate' => 0.00,
                'pst_rate' => 0.00,
                'hst_rate' => 0.15,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.15
            ],
            [
                'province_code' => 'QC',
                'province_name' => 'Quebec',
                'gst_rate' => 0.05,
                'pst_rate' => 0.09975,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.14975
            ],
            [
                'province_code' => 'SK',
                'province_name' => 'Saskatchewan',
                'gst_rate' => 0.05,
                'pst_rate' => 0.06,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.11
            ],
            [
                'province_code' => 'NT',
                'province_name' => 'Northwest Territories',
                'gst_rate' => 0.05,
                'pst_rate' => 0.00,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.05
            ],
            [
                'province_code' => 'NU',
                'province_name' => 'Nunavut',
                'gst_rate' => 0.05,
                'pst_rate' => 0.00,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.05
            ],
            [
                'province_code' => 'YT',
                'province_name' => 'Yukon',
                'gst_rate' => 0.05,
                'pst_rate' => 0.00,
                'hst_rate' => 0.00,
                'vat_rate' => 0.00,
                'total_tax_rate' => 0.05
            ]
        ]);
    }
}
