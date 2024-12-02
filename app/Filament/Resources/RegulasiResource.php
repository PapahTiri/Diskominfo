<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Regulasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RegulasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegulasiResource\RelationManagers;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class RegulasiResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Regulasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';

    protected static ?string $navigationLabel = 'Regulasi';

    protected static ?string $pluralLabel = 'Regulasi';

    protected static ?string $slug = 'regulasi';

    protected static ?string $navigationGroup = 'Kelola Profil';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('peraturan')
                    ->required(),
                TextInput::make('nomor')
                    ->required(),
                TextInput::make('tahun')
                    ->numeric()
                    ->required(),
                Textarea::make('tentang')
                    ->required(),
                FileUpload::make('file_dokumen')
                    ->directory('uploads/regulasi')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('peraturan'),
                TextColumn::make('tentang')
                    ->limit(15),
                TextColumn::make('nomor'),
                TextColumn::make('tahun'),
                TextColumn::make('file_dokumen')
                    ->url(fn(Regulasi $record) => asset('storage/uploads/regulasi/' . $record->file_dokumen))
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
            'index' => Pages\ListRegulasis::route('/'),
            'create' => Pages\CreateRegulasi::route('/create'),
            'edit' => Pages\EditRegulasi::route('/{record}/edit'),
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
