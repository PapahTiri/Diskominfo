<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DaftarInformasi;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DaftarInformasiResource\Pages;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use App\Filament\Resources\DaftarInformasiResource\RelationManagers;

class DaftarInformasiResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = DaftarInformasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationLabel = 'Daftar Informasi';

    protected static ?string $pluralLabel = 'Daftar Informasi';

    protected static ?string $slug = 'daftarInfromasi';

    protected static ?string $navigationGroup = 'Kelola Informasi';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_informasi')
                    ->required(),
                Select::make('id_kategori')
                    ->relationship('kategoriDaftarInformasi', 'nama_kategori')
                    ->required(),
                FileUpload::make('file_dokumen')
                    ->directory('uploads/informasi')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_informasi'),
                TextColumn::make('kategoriDaftarInformasi.nama_kategori'),
                TextColumn::make('file_dokumen')
                    ->url(fn(DaftarInformasi $record) => asset('storage/uploads/informasi/' . $record->file_dokumen))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListDaftarInformasis::route('/'),
            'create' => Pages\CreateDaftarInformasi::route('/create'),
            'edit' => Pages\EditDaftarInformasi::route('/{record}/edit'),
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
