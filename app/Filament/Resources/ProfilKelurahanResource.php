<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProfilKelurahan;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfilKelurahanResource\Pages;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use App\Filament\Resources\ProfilKelurahanResource\RelationManagers;

class ProfilKelurahanResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = ProfilKelurahan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationLabel = 'Profil Kelurahan';

    protected static ?string $pluralLabel = 'Profil 
    Kelurahan';

    protected static ?string $slug = 'profilKelurahan';

    protected static ?string $navigationGroup = 'Kelola Profil';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Profil')
                    ->description('Masukkan detail profil')
                    ->schema([
                        TextInput::make('nama_kelurahan')
                            ->required(),
                        TextInput::make('nomor_telepon')
                            ->required(),
                        TextInput::make('email')
                            ->email()->required(),
                        Textarea::make('alamat')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('logo_kelurahan')
                            ->image()
                            ->directory('uploads/logo')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(3),

                Section::make('Visi & Misi')
                    ->description('Masukkan detail visi dan misi')
                    ->schema([
                        Textarea::make('visi')
                            ->required(),
                        Textarea::make('misi')
                            ->required(),
                    ])->columns(2),

                Section::make('Gedografis & Penduduk')
                    ->description('Masukkan detail geografis dan penduduk')
                    ->schema([
                        TextInput::make('jumlah_penduduk_laki_laki')
                            ->numeric()
                            ->required(),
                        TextInput::make('jumlah_penduduk_perempuan')
                            ->numeric()
                            ->required(),
                        TextInput::make('luas_wilayah')
                            ->numeric()->required(),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kelurahan'),
                TextColumn::make('alamat')
                    ->limit(15),
                TextColumn::make('nomor_telepon'),
                TextColumn::make('email'),
                TextColumn::make('visi')
                    ->limit(15),
                TextColumn::make('misi')
                    ->limit(15),
                TextColumn::make('luas_wilayah'),
                TextColumn::make('jumlah_penduduk_laki_laki'),
                TextColumn::make('jumlah_penduduk_perempuan'),
                TextColumn::make('total_penduduk'),
                ImageColumn::make('logo_kelurahan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfilKelurahans::route('/'),
            'create' => Pages\CreateProfilKelurahan::route('/create'),
            'edit' => Pages\EditProfilKelurahan::route('/{record}/edit'),
        ];
    }

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any'
        ];
    }
}
