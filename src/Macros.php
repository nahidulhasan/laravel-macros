<?php
namespace NahidulHasan\LaravelMacros;


use Collective\Html\FormBuilder;

class Macros extends FormBuilder
{
    /**
     * Generate Bank drop down list
     *
     * @param $name
     * @param null $selected
     * @param array $options
     * @return \Illuminate\Support\HtmlString
     */

    public function selectBank($name, $selected = null, $options = array())
    {
        $list = [
            "" => "Select Bank...",
            "AB Bank" => "AB Bank",
            "Agrani Bank" => "Agrani Bank",
            "Al-Arafah Islami Bank" => "Al-Arafah Islami Bank",
            "Bangladesh Commerce Bank" => "Bangladesh Commerce Bank",
            "BRAC Bank" => "BRAC Bank",
            "Bangladesh Development Bank (BDBL)" => "Bangladesh Development Bank (BDBL)",
            "Bank Asia" => "Bank Asia",
            "Bank Al-Falah Limited" => "Bank Al-Falah Limited",
            "Bangladesh Small Industries and Commerce Bank" => "Bangladesh Small Industries and Commerce Bank",
            "Bangladesh Krishi Bank" => "Bangladesh Krishi Bank",
            "BASIC Bank Limited" => "BASIC Bank Limited",
            "Citibank N.A" => "Citibank N.A",
            "City Bank" => "City Bank",
            "Commercial Bank of Ceylon PLC" => "Commercial Bank of Ceylon PLC",
            "Dhaka Bank" => "Dhaka Bank",
            "Dutch-Bangla Bank" => "Dutch Bangla Bank",
            "Eastern Bank" => "Eastern Bank",
            "Export Import Bank Of Bangladesh" => "Export Import Bank Of Bangladesh",
            "First Security Islami Bank" => "First Security Islami Bank",
            "Habib Bank" => "Habib Bank",
            "ICB Islamic Bank" => "ICB Islamic Bank",
            "International Finance Investment and Commerce Bank" => "International Finance Investment and Commerce Bank",
            "Islami Bank Bangladesh Ltd" => "Islami Bank Bangladesh Ltd",
            "Jamuna Bank" => "Jamuna Bank",
            "Janata Bank" => "Janata Bank",
            "Mercantile Bank" => "Mercantile Bank",
            "Meghna Bank Limited" => "Meghna Bank Limited",
            "Midland Bank Limited" => "Midland Bank Limited",
            "Modhumoti Bank Limited" => "Modhumoti Bank Limited",
            "Mutual Trust Bank" => "Mutual Trust Bank",
            "National Bank" => "National Bank",
            "National Bank of Pakistan" => "National Bank of Pakistan",
            "National Credit & Commerce Bank" => "National Credit & Commerce Bank",
            "NRB Commercial Bank Limited" => "NRB Commercial Bank Limited",
            "NRBC Bank Limited" => "NRBC Bank Limited",
            "One Bank" => "One Bank",
            "The Premier Bank" => "The Premier Bank",
            "Prime Bank" => "Prime Bank",
            "Pubali Bank" => "Pubali Bank",
            "Rajshahi Krishi Unnayan Bank" => "Rajshahi Krishi Unnayan Bank",
            "Rupali Bank" => "Rupali Bank",
            "SBAC Bank" => "SBAC Bank",
            "Shahjalal Islami Bank" => "Shahjalal Islami Bank",
            "Shimanto Bank Limited" => "Shimanto Bank Limited",
            "Social Islami Bank Ltd" => "Social Islami Bank Ltd",
            "Sonali Bank" => "Sonali Bank",
            "South Bangla Agriculture & Commerce Bank Limited" => "South Bangla Agriculture & Commerce Bank Limited",
            "Southeast Bank" => "Southeast Bank",
            "Standard Bank" => "Standard Bank",
            "Standard Chartered Bank" => "Standard Chartered Bank",
            "State Bank of India" => "State Bank of India",
            "The Hongkong and Shanghai Banking Corporation" => "The Hongkong and Shanghai Banking Corporation",
            "Trust Bank" => "Trust Bank",
            "United Commercial Bank Limited" => "United Commercial Bank Limited",
            "Union Bank Limited" => "Union Bank Limited",
            "Uttara Bank" => "Uttara Bank",
            "Woori Bank" => "Woori Bank",
        ];

        return $this->select($name, $list, $selected, $options);
    }
}