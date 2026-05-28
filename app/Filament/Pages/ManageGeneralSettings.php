<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use BackedEnum;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ManageGeneralSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'General Settings';

    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    protected static string $settings = GeneralSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Site Information')
                    ->description('Basic information about your site.')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('site_description')
                            ->label('Site Description')
                            ->rows(3)
                            ->maxLength(500),
                    ]),
                Section::make('Contact Information')
                    ->description('Contact details displayed on the site.')
                    ->icon(Heroicon::OutlinedPhone)
                    ->columns(2)
                    ->schema([
                        TextInput::make('support_email')
                            ->label('Support Email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('support_phone')
                            ->label('Support Phone')
                            ->tel()
                            ->maxLength(20),
                        Textarea::make('address')
                            ->label('Address')
                            ->rows(3)
                            ->columnSpanFull()
                            ->maxLength(500),
                    ]),
            ]);
    }
}
