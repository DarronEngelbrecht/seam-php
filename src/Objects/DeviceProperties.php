<?php

namespace Seam\Objects;

class DeviceProperties
{
    public static function from_json(mixed $json): DeviceProperties|null
    {
        if (!$json) {
            return null;
        }
        return new self(
            accessory_keypad: isset($json->accessory_keypad)
                ? DeviceAccessoryKeypad::from_json($json->accessory_keypad)
                : null,
            appearance: DeviceAppearance::from_json($json->appearance),
            battery: isset($json->battery)
                ? DeviceBattery::from_json($json->battery)
                : null,
            battery_level: $json->battery_level ?? null,
            currently_triggering_noise_threshold_ids: $json->currently_triggering_noise_threshold_ids ??
                null,
            has_direct_power: $json->has_direct_power ?? null,
            image_alt_text: $json->image_alt_text ?? null,
            image_url: $json->image_url ?? null,
            manufacturer: $json->manufacturer ?? null,
            model: DeviceModel::from_json($json->model),
            name: $json->name,
            noise_level_decibels: $json->noise_level_decibels ?? null,
            offline_access_codes_enabled: $json->offline_access_codes_enabled ??
                null,
            online: $json->online,
            online_access_codes_enabled: $json->online_access_codes_enabled ??
                null,
            serial_number: $json->serial_number ?? null,
            supports_accessory_keypad: $json->supports_accessory_keypad ?? null,
            supports_offline_access_codes: $json->supports_offline_access_codes ??
                null,
            assa_abloy_credential_service_metadata: isset(
                $json->assa_abloy_credential_service_metadata
            )
                ? DeviceAssaAbloyCredentialServiceMetadata::from_json(
                    $json->assa_abloy_credential_service_metadata
                )
                : null,
            akiles_metadata: isset($json->akiles_metadata)
                ? DeviceAkilesMetadata::from_json($json->akiles_metadata)
                : null,
            august_metadata: isset($json->august_metadata)
                ? DeviceAugustMetadata::from_json($json->august_metadata)
                : null,
            avigilon_alta_metadata: isset($json->avigilon_alta_metadata)
                ? DeviceAvigilonAltaMetadata::from_json(
                    $json->avigilon_alta_metadata
                )
                : null,
            brivo_metadata: isset($json->brivo_metadata)
                ? DeviceBrivoMetadata::from_json($json->brivo_metadata)
                : null,
            controlbyweb_metadata: isset($json->controlbyweb_metadata)
                ? DeviceControlbywebMetadata::from_json(
                    $json->controlbyweb_metadata
                )
                : null,
            dormakaba_oracode_metadata: isset($json->dormakaba_oracode_metadata)
                ? DeviceDormakabaOracodeMetadata::from_json(
                    $json->dormakaba_oracode_metadata
                )
                : null,
            ecobee_metadata: isset($json->ecobee_metadata)
                ? DeviceEcobeeMetadata::from_json($json->ecobee_metadata)
                : null,
            four_suites_metadata: isset($json->four_suites_metadata)
                ? DeviceFourSuitesMetadata::from_json(
                    $json->four_suites_metadata
                )
                : null,
            genie_metadata: isset($json->genie_metadata)
                ? DeviceGenieMetadata::from_json($json->genie_metadata)
                : null,
            honeywell_resideo_metadata: isset($json->honeywell_resideo_metadata)
                ? DeviceHoneywellResideoMetadata::from_json(
                    $json->honeywell_resideo_metadata
                )
                : null,
            hubitat_metadata: isset($json->hubitat_metadata)
                ? DeviceHubitatMetadata::from_json($json->hubitat_metadata)
                : null,
            igloo_metadata: isset($json->igloo_metadata)
                ? DeviceIglooMetadata::from_json($json->igloo_metadata)
                : null,
            igloohome_metadata: isset($json->igloohome_metadata)
                ? DeviceIgloohomeMetadata::from_json($json->igloohome_metadata)
                : null,
            kwikset_metadata: isset($json->kwikset_metadata)
                ? DeviceKwiksetMetadata::from_json($json->kwikset_metadata)
                : null,
            lockly_metadata: isset($json->lockly_metadata)
                ? DeviceLocklyMetadata::from_json($json->lockly_metadata)
                : null,
            minut_metadata: isset($json->minut_metadata)
                ? DeviceMinutMetadata::from_json($json->minut_metadata)
                : null,
            nest_metadata: isset($json->nest_metadata)
                ? DeviceNestMetadata::from_json($json->nest_metadata)
                : null,
            noiseaware_metadata: isset($json->noiseaware_metadata)
                ? DeviceNoiseawareMetadata::from_json(
                    $json->noiseaware_metadata
                )
                : null,
            nuki_metadata: isset($json->nuki_metadata)
                ? DeviceNukiMetadata::from_json($json->nuki_metadata)
                : null,
            salto_ks_metadata: isset($json->salto_ks_metadata)
                ? DeviceSaltoKsMetadata::from_json($json->salto_ks_metadata)
                : null,
            salto_metadata: isset($json->salto_metadata)
                ? DeviceSaltoMetadata::from_json($json->salto_metadata)
                : null,
            schlage_metadata: isset($json->schlage_metadata)
                ? DeviceSchlageMetadata::from_json($json->schlage_metadata)
                : null,
            seam_bridge_metadata: isset($json->seam_bridge_metadata)
                ? DeviceSeamBridgeMetadata::from_json(
                    $json->seam_bridge_metadata
                )
                : null,
            smartthings_metadata: isset($json->smartthings_metadata)
                ? DeviceSmartthingsMetadata::from_json(
                    $json->smartthings_metadata
                )
                : null,
            tedee_metadata: isset($json->tedee_metadata)
                ? DeviceTedeeMetadata::from_json($json->tedee_metadata)
                : null,
            ttlock_metadata: isset($json->ttlock_metadata)
                ? DeviceTtlockMetadata::from_json($json->ttlock_metadata)
                : null,
            two_n_metadata: isset($json->two_n_metadata)
                ? DeviceTwoNMetadata::from_json($json->two_n_metadata)
                : null,
            visionline_metadata: isset($json->visionline_metadata)
                ? DeviceVisionlineMetadata::from_json(
                    $json->visionline_metadata
                )
                : null,
            wyze_metadata: isset($json->wyze_metadata)
                ? DeviceWyzeMetadata::from_json($json->wyze_metadata)
                : null,
            _experimental_supported_code_from_access_codes_lengths: $json->_experimental_supported_code_from_access_codes_lengths ??
                null,
            code_constraints: array_map(
                fn($c) => DeviceCodeConstraints::from_json($c),
                $json->code_constraints ?? []
            ),
            door_open: $json->door_open ?? null,
            has_native_entry_events: $json->has_native_entry_events ?? null,
            keypad_battery: isset($json->keypad_battery)
                ? DeviceKeypadBattery::from_json($json->keypad_battery)
                : null,
            locked: $json->locked ?? null,
            max_active_codes_supported: $json->max_active_codes_supported ??
                null,
            supported_code_lengths: $json->supported_code_lengths ?? null,
            supports_backup_access_code_pool: $json->supports_backup_access_code_pool ??
                null,
            active_thermostat_schedule: isset($json->active_thermostat_schedule)
                ? DeviceActiveThermostatSchedule::from_json(
                    $json->active_thermostat_schedule
                )
                : null,
            available_climate_presets: array_map(
                fn($a) => DeviceAvailableClimatePresets::from_json($a),
                $json->available_climate_presets ?? []
            ),
            available_fan_mode_settings: $json->available_fan_mode_settings ??
                null,
            available_hvac_mode_settings: $json->available_hvac_mode_settings ??
                null,
            current_climate_setting: isset($json->current_climate_setting)
                ? DeviceCurrentClimateSetting::from_json(
                    $json->current_climate_setting
                )
                : null,
            default_climate_setting: isset($json->default_climate_setting)
                ? DeviceDefaultClimateSetting::from_json(
                    $json->default_climate_setting
                )
                : null,
            fallback_climate_preset_key: $json->fallback_climate_preset_key ??
                null,
            fan_mode_setting: $json->fan_mode_setting ?? null,
            is_cooling: $json->is_cooling ?? null,
            is_fan_running: $json->is_fan_running ?? null,
            is_heating: $json->is_heating ?? null,
            is_temporary_manual_override_active: $json->is_temporary_manual_override_active ??
                null,
            max_cooling_set_point_celsius: $json->max_cooling_set_point_celsius ??
                null,
            max_cooling_set_point_fahrenheit: $json->max_cooling_set_point_fahrenheit ??
                null,
            max_heating_set_point_celsius: $json->max_heating_set_point_celsius ??
                null,
            max_heating_set_point_fahrenheit: $json->max_heating_set_point_fahrenheit ??
                null,
            min_cooling_set_point_celsius: $json->min_cooling_set_point_celsius ??
                null,
            min_cooling_set_point_fahrenheit: $json->min_cooling_set_point_fahrenheit ??
                null,
            min_heating_cooling_delta_celsius: $json->min_heating_cooling_delta_celsius ??
                null,
            min_heating_cooling_delta_fahrenheit: $json->min_heating_cooling_delta_fahrenheit ??
                null,
            min_heating_set_point_celsius: $json->min_heating_set_point_celsius ??
                null,
            min_heating_set_point_fahrenheit: $json->min_heating_set_point_fahrenheit ??
                null,
            relative_humidity: $json->relative_humidity ?? null,
            temperature_celsius: $json->temperature_celsius ?? null,
            temperature_fahrenheit: $json->temperature_fahrenheit ?? null,
            temperature_threshold: isset($json->temperature_threshold)
                ? DeviceTemperatureThreshold::from_json(
                    $json->temperature_threshold
                )
                : null
        );
    }

    public function __construct(
        public DeviceAccessoryKeypad|null $accessory_keypad,
        public DeviceAppearance $appearance,
        public DeviceBattery|null $battery,
        public float|null $battery_level,
        public array|null $currently_triggering_noise_threshold_ids,
        public bool|null $has_direct_power,
        public string|null $image_alt_text,
        public string|null $image_url,
        public string|null $manufacturer,
        public DeviceModel $model,
        public string $name,
        public float|null $noise_level_decibels,
        public bool|null $offline_access_codes_enabled,
        public bool $online,
        public bool|null $online_access_codes_enabled,
        public string|null $serial_number,
        public bool|null $supports_accessory_keypad,
        public bool|null $supports_offline_access_codes,
        public DeviceAssaAbloyCredentialServiceMetadata|null $assa_abloy_credential_service_metadata,
        public DeviceAkilesMetadata|null $akiles_metadata,
        public DeviceAugustMetadata|null $august_metadata,
        public DeviceAvigilonAltaMetadata|null $avigilon_alta_metadata,
        public DeviceBrivoMetadata|null $brivo_metadata,
        public DeviceControlbywebMetadata|null $controlbyweb_metadata,
        public DeviceDormakabaOracodeMetadata|null $dormakaba_oracode_metadata,
        public DeviceEcobeeMetadata|null $ecobee_metadata,
        public DeviceFourSuitesMetadata|null $four_suites_metadata,
        public DeviceGenieMetadata|null $genie_metadata,
        public DeviceHoneywellResideoMetadata|null $honeywell_resideo_metadata,
        public DeviceHubitatMetadata|null $hubitat_metadata,
        public DeviceIglooMetadata|null $igloo_metadata,
        public DeviceIgloohomeMetadata|null $igloohome_metadata,
        public DeviceKwiksetMetadata|null $kwikset_metadata,
        public DeviceLocklyMetadata|null $lockly_metadata,
        public DeviceMinutMetadata|null $minut_metadata,
        public DeviceNestMetadata|null $nest_metadata,
        public DeviceNoiseawareMetadata|null $noiseaware_metadata,
        public DeviceNukiMetadata|null $nuki_metadata,
        public DeviceSaltoKsMetadata|null $salto_ks_metadata,
        public DeviceSaltoMetadata|null $salto_metadata,
        public DeviceSchlageMetadata|null $schlage_metadata,
        public DeviceSeamBridgeMetadata|null $seam_bridge_metadata,
        public DeviceSmartthingsMetadata|null $smartthings_metadata,
        public DeviceTedeeMetadata|null $tedee_metadata,
        public DeviceTtlockMetadata|null $ttlock_metadata,
        public DeviceTwoNMetadata|null $two_n_metadata,
        public DeviceVisionlineMetadata|null $visionline_metadata,
        public DeviceWyzeMetadata|null $wyze_metadata,
        public array|null $_experimental_supported_code_from_access_codes_lengths,
        public array|null $code_constraints,
        public bool|null $door_open,
        public bool|null $has_native_entry_events,
        public DeviceKeypadBattery|null $keypad_battery,
        public bool|null $locked,
        public float|null $max_active_codes_supported,
        public array|null $supported_code_lengths,
        public bool|null $supports_backup_access_code_pool,
        public DeviceActiveThermostatSchedule|null $active_thermostat_schedule,
        public array|null $available_climate_presets,
        public array|null $available_fan_mode_settings,
        public array|null $available_hvac_mode_settings,
        public DeviceCurrentClimateSetting|null $current_climate_setting,
        public DeviceDefaultClimateSetting|null $default_climate_setting,
        public string|null $fallback_climate_preset_key,
        public string|null $fan_mode_setting,
        public bool|null $is_cooling,
        public bool|null $is_fan_running,
        public bool|null $is_heating,
        public bool|null $is_temporary_manual_override_active,
        public float|null $max_cooling_set_point_celsius,
        public float|null $max_cooling_set_point_fahrenheit,
        public float|null $max_heating_set_point_celsius,
        public float|null $max_heating_set_point_fahrenheit,
        public float|null $min_cooling_set_point_celsius,
        public float|null $min_cooling_set_point_fahrenheit,
        public float|null $min_heating_cooling_delta_celsius,
        public float|null $min_heating_cooling_delta_fahrenheit,
        public float|null $min_heating_set_point_celsius,
        public float|null $min_heating_set_point_fahrenheit,
        public float|null $relative_humidity,
        public float|null $temperature_celsius,
        public float|null $temperature_fahrenheit,
        public DeviceTemperatureThreshold|null $temperature_threshold
    ) {
    }
}
